<?php

namespace App;

class Cart
{
	
	public $items=null;
	public $totalcant=0;
	public $totalprecio=0;


	public function __construct($oldcart)
	{
		if($oldcart){
			$this->items=$oldcart->items;
			$this->totalcant=$oldcart->totalcant;
			$this->totalprecio=$oldcart->totalprecio;

		}



	}

	public function add($item, $id){


		$storeditem =['cantidad'=>0, 'precio'=>$item->precio, 'item'=>$item ];
		if($this->items){

			if(array_key_exists($id, $this->items)) {
				$storeditem = $this->items[$id];
			}
		}

		$storeditem['cantidad']++;
		$storeditem['precio']=$item->precio * $storeditem['cantidad'];
		$this->items[$id]=$storeditem;
		$this->totalcant++;
		$this->totalprecio += $item->precio;
	}
		public function quitardocena($id){
			$this->items[$id]['cantidad']--;
			$this->items[$id]['precio'] -= $this->items[$id]['item']['precio'];
			$this->totalcant--;
			$this->totalprecio -= $this->items[$id]['item']['precio'];
			if($this->items[$id]['cantidad']<=0){
				unset($this->items[$id]);
			}
		}
		public function quitartodo($id){
			$this->totalcant -= $this->items[$id]['cantidad'];
			$this->totalprecio -= $this->items[$id]['precio'];
			unset($this->items[$id]);
		}

}