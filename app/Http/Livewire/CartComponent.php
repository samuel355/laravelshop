<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart; 

class CartComponent extends Component
{
    //Increase product Quantity
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product-> qty + 1;
        Cart::update($rowId, $qty);
    }

    //Decrease Product Quantity
    public function decreaseQuantity($rowId){
        $product = Cart::get($rowId);
        $qty = $product-> qty - 1;
        Cart::update($rowId, $qty);
    }

    //Delete Product from Cart
    public function destroy($rowId){
        Cart::remove($rowId);
        session()->flash('success_message', 'Item has been deleted');
    }

    public function destroyAll(){
        Cart::destroy();
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
