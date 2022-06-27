import React, { Component } from 'react';
import { PropTypes } from 'prop-types';

export class PageItem extends Component {
    state = {
        id: '',
        isLoaded: false
    }

    static propTypes = {
        page: PropTypes.object.isRequired
    }

    componentDidMount() {
        const { id, acf, title } = this.props.page;
     

        Promise.all([id]).then(res => {
            console.log(res);
            this.setState({
                acf: res[0].data,
                isLoaded: true
             });
        });
    }
   
  render() {
      const { id, title, link, content, acf } = this.props.page;

      const {  isLoaded  } = this.state;
        if(isLoaded) {
        return (
            <div>
                <h2>{ title.rendered }</h2>
                <img src={acf.home_page_banner} />
                <h4>{ acf.sub_header_title } Sub title goes here</h4>
                <p dangerouslySetInnerHTML={{__html: content.rendered }}></p>
                <button src={link}></button>
            </div>
            );
        }

        return null;
        
  }
}

export default PageItem;