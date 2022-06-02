import React, { Component } from 'react';
import Logo from './Logo';
import styled  from 'styled-components';




const HeaderContainer = styled.div `
    padding: 20px;
    background-image: blue;
`;


const Button = styled.button`
  /* Adapt the colors based on primary prop */
  background: ${props => props.primary ? "white" : "green"};
  color: ${props => props.primary ? "green" : "white"};

  &:hover {
    color: green;
    background-color: ${green => green.bg === "white" ? "white" : "blue"};
  }

  font-size: 1em;
  margin: 1em;
  padding: 0.25em 1em;
  border: 2px solid blue;
  border-radius: 3px;
`;


class Header extends Component {    
    render() { 
      const { acf } = this.props.page;
        return (
            <HeaderContainer style={{ backgroundImage : "url(${acf})" }} >
                    <Logo />
                    <Button bg="white">My Button</Button>
            </HeaderContainer>       
        );
        
    }
     
}
 
export default Header;