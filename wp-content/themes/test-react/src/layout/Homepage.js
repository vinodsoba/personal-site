import React, { Fragment } from 'react';
import Header from '../components/Header';
import { Pages } from '../components/Pages';


function Homepage() {
    return ( 
    <Fragment>
       <Pages>
        <Header />
       </Pages>
    </Fragment> 
     );
}

export default Homepage;