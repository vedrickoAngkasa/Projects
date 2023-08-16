// import { Component } from 'react';
import classes from './Counter.module.css';
// import { useSelector, useDispatch, connect } from 'react-redux'
import { useSelector, useDispatch } from 'react-redux'
import  { counterActions } from '../store/counter'

const Counter = () => {
  const disptach = useDispatch();
  const counter = useSelector((state) => state.counter.counter);
  const show = useSelector((state) => state.counter.showCounter)

  const incrementHandler =  () => {
    disptach(counterActions.increment())
  }

  const decrementHandler = () => {
    disptach(counterActions.decrement())
  }

  const increaseHandler = () => {
    disptach(counterActions.increase(10))
  }

  const toggleCounterHandler = () => {
    disptach(counterActions.toggleCounter())
  };

  return (
    <main className={classes.counter}>
      <h1>Redux Counter</h1>
      {show && <div className={classes.value}>{counter}</div>}
      <div>
        <button onClick={incrementHandler}>Increment</button>
        <button onClick={increaseHandler}>Increase By 5</button>
        <button onClick={decrementHandler}>Decrement</button>
      </div>
      <button onClick={toggleCounterHandler}>Toggle Counter</button>
    </main>
  );
};

// class Counter extends Component{

//     incrementHandler(){
//       this.props.increment();
//     }

//     decrementHandler(){
//       this.props.decrement();   
//     }

//     toggleCounterHandler(){

//     }
  
//     render(){
//       return (
//         <main className={classes.counter}>
//           <h1>Redux Counter</h1>
//           <div className={classes.value}>{this.props.counter}</div>
//           <div>
//             <button onClick={this.decrementHandler.bind(this)}>Decrement</button>
//             <button onClick={this.incrementHandler.bind(this)}>Increment</button>
//           </div>
//           <button onClick={this.toggleCounterHandler}>Toggle Counter</button>
//         </main>
//       );
//     }
// }

// const mapStateToProps = state => {
//   return{
//     counter: state.counter
//   }
// }

// const mapDispatchToProps = disptach => {
//   return{
//     increment: () => disptach({ type: 'increment'}),
//     decrement: () => disptach({ type: 'decrement'}),
//   }
// }

// export default connect(mapStateToProps, mapDispatchToProps )(Counter);
export default Counter
