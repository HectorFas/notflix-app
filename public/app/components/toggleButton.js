import { useState } from 'react';
import './toggleButton.css'

const Button = () => {
    const [isActive, setIsActive] = useState(false);

    const handleClick = () => {
      setIsActive(!isActive);
    }
 
    return (
      <div className="toggle">
        <button type='checkbox' onClick={handleClick}>{isActive ? 'Apagado' : 'Encendido'}</button>
        
      </div> 
    )
  }


export default Button;