import React, { Component } from 'react';

export class Skilltem extends Component {
  render() {
      const { title, link, excerpt } = this.props.skill;
    return (
      <div>
          <h2>{ title.rendered }</h2>
          <p dangerouslySetInnerHTML={{__html: excerpt.rendered }}></p>
          <button src={link}></button>
      </div>
    );
  }
}

export default Skilltem;