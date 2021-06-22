import React from 'react'

export default function NavBar() {
  return (
    <div>
      <nav className="navbar navbar-expand-lg navbar-dark bg-primary">
        <div className="container-fluid">
          <a className="navbar-brand" href="#">Restaurant</a>
          <button
            className="btn pull-right"
            style={{backgroundColor: "#fff"}}
            type="submit">Logout</button>
        </div>
      </nav>

    </div>
  )
}
