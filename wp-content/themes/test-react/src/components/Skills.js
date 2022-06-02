import React, { Component } from 'react';
import axios from 'axios';
import SkillItem from './Skilltem';


export class Skills extends Component {
    state = {
        skills: [],
        isLoaded: false
    }

    componentDidMount(){
        axios.get('http://react-demo.local/wp-json/wp/v2/skill')
         .then(res => this.setState({
             skills: res.data,
             isLoaded: true
         }))
         .catch(err => console.log(err));
    }

  render() {
     const { skills, isLoaded } = this.state;
     console.log(this.state);
     if(isLoaded){
        return (
            <div>
                {
                    skills.map(skill => (
                      <SkillItem key={skill.id} skill={skill} />  
                    ))
                }
            </div>
          )
     }

     return ( <div>Loading..</div>);
    
  }
}

export default Skills