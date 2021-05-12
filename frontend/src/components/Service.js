import React from 'react'

export default function service(props) {
  return (
    <div className="col pt-2">
      <div   data-bs-hover-animate="pulse">
        <img src={"/assets/img/"+props.name+".png"} style={{
          width: 150
        }}/>
      </div>
      <div className="d-grid gap-2">
            <button className="btn btn-primary" type="button">{props.name}</button>
            
        </div>
    </div>
  )
}
