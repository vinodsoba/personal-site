import React, { Component, Fragment } from 'react';
import  { BrowserRouter  }  from 'react-router-dom';
import './App.css';
import Homepage from './layout/Homepage';




class App extends Component {
  render() {
    return (
      <BrowserRouter>
         <Fragment>
            <Homepage />
          </Fragment>
      </BrowserRouter>  
     
          
     
    );
  }
  
}

export default App;
