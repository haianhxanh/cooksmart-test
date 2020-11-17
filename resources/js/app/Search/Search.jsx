import React, {useState, useEffect} from 'react'

function Search() {
    const [cuisine, setCuisine] = useState('');
    const [time, setTime] = useState('');
    // const [diet, setDiet] = useState('');
    const [recipes, setRecipes] = useState([]);

    const url = ''

    const searchRecipes = async (e) => {
        e.preventDefault();
        try {
            const response = await fetch(url);
            const data = await response.json();
            console.log(data);
            setRecipes(data);
        } catch (error) {
            console.log(error)
        }
    }

    useEffect(() => {
        searchRecipes()
    }, [cuisine, time])

    const selectCuisine = (e) => {
        setCuisine(e.target.value)
    }

    const selectTime = (e) => {
        setTime(e.target.value)
    }

    // const selectDiet = (e) => {
    //     setDiet(e.target.value)
    // }

    return (
        <div className="search-bar">
            <form className="form-group" onSubmit={searchRecipes}>
                <label className="label" htmlFor="time">Time</label>
                <select className="drop-down" name="time" onChange={selectTime}>
                    <option>I have nothing but time!</option>
                    <option value="30 min">30 minutes</option>
                    <option value="60 min">60 minutes</option>
                    <option value="90 min">90 minutes</option>
                </select>

                <label className="label" htmlFor="cuisine">Cuisine</label>
                <select className="drop-down" name="cuisine" onChange={selectCuisine}>
                    <option>Pick the most delicious one!</option>
                    <option value="Western">Western</option>
                    <option value="Asian">Asian</option>
                    <option value="Fusion">Fusion</option>
                    <option value="Middle Eastern">Middle Eastern</option>
                    <option value="African">African</option>
                    <option value="Latin American">Latin American</option>
                </select>

            </form>
        </div>
    )
}

export default Search

