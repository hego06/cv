<?php

namespace App\Http\Controllers\Seller;

use App\User;
use App\Seller;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Symfony\Component\HttpKernel\Exception\HttpException;

class SellerProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Seller $seller)
    {
        $products = $seller->products;

        return $this->showAll($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $seller)
    {
        $rules =[
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image',
        ];

        $this->validate($request, $rules);

        $data = $request->all();
        $data['status'] = Product::PRODUCTO_NO_DISPONIBLE;
        $data['image'] = '1.jpg';
        $data['seller_id'] = $seller->id;
        $product = Product::create($data);

        return $this->showOne($product, 201);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller, Product $product)
    {
        $this->verificarVendedor($seller,$product);

        $rules = [
            'quantity' => 'integer|min:1',
            'status' => 'in:' . Product::PRODUCTO_DISPONIBLE . ',' . Product::PRODUCTO_NO_DISPONIBLE,
            'image' => 'image',
        ];

        $this->validate($request, $rules);

        

        $product->fill($request->only([
            'name',
            'description',
            'quantity'
        ]));

        if($request->has('status'))
        {
            $product->status = $request->status;
            if($product->estadoDisponible() && $product->categories()->count() == 0)
            {
                return $this->errorResponse('Un producto activo debe tener al menos una categoria', 409); 
            }
        }

        if($product->isClean())
        {
            return $this->errorResponse('Debe proporcionar al menos un valor diferente', 422);
        }

        $product->save();

        return $this->showOne($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller, Product $product)
    {
        $this->verificarVendedor($seller,$product);
        $product->delete();
        return $this->showOne($product);


    }

    protected function verificarVendedor(Seller $seller, Product $product)
    {
        if($seller->id != $product->seller_id)
        {
            throw new HttpException(422, 'El vendedor no le pertenece el producto especificado');
            //return $this->errorResponse('No vendedor no puede editar un producto que no le pertenece', 422);
        }
    }
}
