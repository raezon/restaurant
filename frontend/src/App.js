import logo from './logo.svg';
import './App.css';
import axios from "axios";
import React, {useState} from 'react';
import NavBar from './components/NavBar';
import ListOfServices from './components/ListOfServices';

function App() {
  const [fixtureData,
    setFixture] = useState(null);
  //alert();

  axios
    .get(`http://localhost/Restaurant/`)
    .then(res => {
      // alert(JSON.stringify(res))
      setFixture(res.data);

    })

  return (
    <div className="App">
      <NavBar/>
      <ListOfServices/>

    </div>
  );
}

export default App;
