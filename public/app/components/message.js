import './message.css'


const Message = ({ type, children }) => {
    return (
          <div className={`message ${type === 'success' ? 'success' : 'error'}`}>
            {children}
          </div>
    );
};



export default Message;