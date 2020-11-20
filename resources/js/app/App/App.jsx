import React from 'react';
import Banner from '../Banner/Banner.jsx';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import Search from '../Search/Search.jsx';


function App() {
    return (

        <Router>
            <Switch>
                <Route exact path="/" children={<Banner />}/>
                <Route path="/search" > 
                    <Search />
                </Route>
            </Switch>
        </Router>

    )
}
export default App