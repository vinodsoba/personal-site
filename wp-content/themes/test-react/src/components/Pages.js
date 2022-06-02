import React, { Component } from 'react';
import axios from 'axios';
import PageItem from './PageItem';

export class Pages extends Component {
    state = {
        pages: [],
        isLoaded: false
    }

    componentDidMount(){
        const getPage = axios.get('http://react-demo.local/wp-json/wp/v2/pages/')
         .then(res => this.setState({
             pages: res.data,
             isLoaded: true
         }))
         .catch(err => console.log(err));
    }

  render() {
     const { pages, isLoaded } = this.state;
     console.log(this.state);
     if(isLoaded){
        return (
            <div>
                { pages.map(page => (
                        <PageItem key={page.id} page={page}/> 
                ))}
            </div>
          );
     }

     return ( <div>Loading..</div>);
    
  }
}

export default Pages