import { useReducer } from "react";
import React from "react";
import CartContext from "./cart-context";

const defaultCartState = {
  items: [],
  totalAmount: 0,
};

const cartReducer = (state, action) => {
  if (action.type === "ADD") {
    const exisitingCartItemIndex = state.items.findIndex(
      (item) => item.id === action.item.id
    );
    const existingCartItem = state.items[exisitingCartItemIndex];
    let updatedItems;

    if (existingCartItem) {
      const updatedItem = {
        ...existingCartItem,
        amount: existingCartItem.amount + action.item.amount,
      };
      updatedItems = [...state.items];
      updatedItems[exisitingCartItemIndex] = updatedItem;
    } else {
      updatedItems = state.items.concat(action.item);
    }

    const updatedTotalAmount =
      state.totalAmount + action.item.price * action.item.amount;
    return {
      items: updatedItems,
      totalAmount: updatedTotalAmount,
    };
  }
  
  if (action.type === "REMOVE") {

    const exisitingCartItemIndex = state.items.findIndex(
        (item) => item.id === action.id
    );
        
    const exisitingItem = state.items[exisitingCartItemIndex];
    const updatedTotalAmount = state.totalAmount - exisitingItem.price;
    let updatedItems;

    if(exisitingItem.amount === 1){
        updatedItems = state.items.filter(item => item.id !== action.id);
    }else{
        const updatedItem = {...exisitingItem, amount: exisitingItem.amount -1};
        updatedItems = [...state.items]
        updatedItems[exisitingCartItemIndex] = updatedItem;
    }
    return {
        items: updatedItems,
        totalAmount: updatedTotalAmount
      }
  }

  
};

const CartProvider = (props) => {
  const [cartState, disptachCartAction] = useReducer(
    cartReducer,
    defaultCartState
  );

  const addItemToCartHandler = (item) => {
    disptachCartAction({ type: "ADD", item: item });
  };

  const removeItemFromCartHandler = (id) => {
    disptachCartAction({ type: "REMOVE", id: id });
  };

  const cartContext = {
    items: cartState.items,
    totalAmount: cartState.totalAmount,
    addItem: addItemToCartHandler,
    removeItem: removeItemFromCartHandler,
  };

  return (
    <CartContext.Provider value={cartContext}>
      {props.children}
    </CartContext.Provider>
  );
};

export default CartProvider;
