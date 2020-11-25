import React, { useState, useEffect } from "react";
import SearchResults from './SearchResults.jsx';
import {BrowserRouter as Router, Route, Switch} from "react-router-dom";
import '../../../scss/search.scss';

function Search() {
    const [cuisine, setCuisine] = useState("");
    const [time, setTime] = useState("");
    const [diet, setDiet] = useState("");
    const [recipes, setRecipes] = useState([]);

  
    // const [searchValue, setSearchValue] = useState();
    // const [searchResults, setSearchResults] = useState([]);
    const [page, setPage] = useState(0);
    const [hasMore, setHasMore] = useState(true);

    const url = "http://www.cooksmart.test/api/recipes";

    const searchRecipes = async () => {
        let url_with_params = url + "?";
        if (cuisine) {
            url_with_params += "&cuisine=" + encodeURIComponent(cuisine);
        }
        if (time) {
            url_with_params += "&time=" + encodeURIComponent(time);
        }
        if (diet) {
            url_with_params += "&diet=" + encodeURIComponent(diet);
        }
        if (page > 0) {
            url_with_params += "&page=" + encodeURIComponent(page);
        }
        try {
            const response = await fetch(url_with_params);
            const data = await response.json();
            console.log(data);
            
            setHasMore(data.recipes.length === 4);
            setRecipes(recipes => recipes.concat(data.recipes));
        } catch (error) {
            console.log(error);
        }
    };

    useEffect(() => {
        searchRecipes();
    }, [page]);

    const selectCuisine = e => {
        setCuisine(e.target.value);
    };

    const selectTime = e => {
        setTime(e.target.value);
    };

    const selectDiet = e => {
        setDiet(e.target.value);
    };

    return (
        <div className="container">
            <div className="search-bar">
                <h1 className="title">Find a Recipe</h1>
                <form className="search-form" 
                    onSubmit={(e) => { 
                        e.preventDefault();
                        setRecipes([]);
                        setPage(0);
                        searchRecipes()
                    }}>
                    <span className="category">
                    <label className="label" htmlFor="time">
                        Time
                    </label>
                    <img className="category-img" src="/images/time.png" height="30px" width="30px"/>
                    <select className="drop-down" name="time" onChange={selectTime}>
                        <option value="">I have nothing but time!</option>
                        <option value="30">30 minutes</option>
                        <option value="60">60 minutes</option>
                        <option value="90">90 minutes</option>
                    </select>
                    </span>

                    <span className="category">
                    <label className="label" htmlFor="cuisine">
                        Cuisine
                    </label>
                    <img className="category-img" src="/images/cuisine.png" height="30px" width="30px"/>
                    <select
                        className="drop-down"
                        name="cuisine"
                        onChange={selectCuisine}
                    >
                        <option value="">Pick the most delicious one!</option>
                        <option value="Western">Western</option>
                        <option value="Asian">Asian</option>
                        <option value="Fusion">Fusion</option>
                        <option value="Middle Eastern">Middle Eastern</option>
                        <option value="African">African</option>
                        <option value="Latin American">Latin American</option>
                    </select>
                    </span>

                    <span className="category">
                    <label className="label" htmlFor="diet">
                        Diet
                    </label>
                    <img className="category-img" src="/images/diet.png" height="30px" width="30px"/>
                    <select className="drop-down" name="diet" onChange={selectDiet}>
                        <option value="">Suprise me!</option>
                        <option value="vegetarian">Vegetarian</option>
                        <option value="pescatarian">Pescatarian</option>
                        <option value="dairy-free">Dairy-free</option>
                    </select>
                    </span>

                    <span className="category">
                    <button className="recipe-btn" type="submit">Take me to the recipes!</button>
                    </span>
                </form>

                    <SearchResults recipes={recipes}/>
                    
                    {
                // moved outside of div, if doesn't work, move above last line
                        hasMore === true ? 
                        <button className="add-more" onClick={() => setPage(page + 1)}>Find more</button> : ''
                    }

            </div>
           
        </div>
    );
}

export default Search;
