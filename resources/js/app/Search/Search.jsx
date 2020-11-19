import React, { useState, useEffect } from "react";

function Search() {
    const [cuisine, setCuisine] = useState("");
    const [time, setTime] = useState("");
    const [diet, setDiet] = useState("");
    const [recipes, setRecipes] = useState([]);

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
        try {
            const response = await fetch(url_with_params);
            const data = await response.json();
            console.log(data);
            setRecipes(data);
        } catch (error) {
            console.log(error);
        }
    };

    useEffect(() => {
        searchRecipes();
    }, [cuisine, time, diet]);

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
        <div className="search-bar">
            <form className="form-group" onSubmit={searchRecipes}>
                <label className="label" htmlFor="time">
                    Time
                </label>
                <select className="drop-down" name="time" onChange={selectTime}>
                    <option value="">I have nothing but time!</option>
                    <option value="30">30 minutes</option>
                    <option value="60">60 minutes</option>
                    <option value="90">90 minutes</option>
                </select>

                <label className="label" htmlFor="cuisine">
                    Cuisine
                </label>
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

                <label className="label" htmlFor="diet">
                    Diet
                </label>
                <select className="drop-down" name="diet" onChange={selectDiet}>
                    <option value="">Suprise me!</option>
                    <option value="Vegetarian">Vegetarian</option>
                    <option value="Pescatarian">Pescatarian</option>
                    <option value="Dairy-free">Dairy-free</option>
                </select>

                <button type="submit">Take me to the delicious recipes</button>
            </form>
            <div className="results">
                <h2>{recipes.name}</h2>
            </div>
        </div>
    );
}

export default Search;
