import React, { Fragment } from 'react';
import Header from '../components/Header';

import Navigation from "../components/Nav";
import { Pages } from '../components/Pages';


function Homepage() {
    return ( 
    <Fragment>
       <Pages>
        <Header />
        <Navigation />
       </Pages>
    </Fragment> 
     );
}

export default Homepage;