import React, { useState, useEffect } from "react";

const SearchResults = ({recipes}) => {
  return (
    <>
          <div className="results">
        {
            recipes.map((recipe) => (
                <div key={recipe.id}>
                    <h2>{recipe.name}</h2>
                    <div>
                        <img style={{ width: '200px' }} src={recipe.image_url} alt={recipe.name}/>
                        <button><a href={'http://www.cooksmart.test/recipes/' + recipe.id}>View details</a></button>
                    </div>
                </div>
            ))
        }
    </div>
    </>
  )
}

export default SearchResults