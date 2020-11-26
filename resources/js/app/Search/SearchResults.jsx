import React, { useState, useEffect } from "react";

const SearchResults = ({recipes}) => {
  return (
    <>
          <div className="results">
        {
            recipes.map((recipe) => (
                <div key={recipe.id} className="results-card">
                    <h4 className="results-name">{recipe.name}</h4>
                    <div className="results-img">
                      <img style={{ width: '200px' }} src={recipe.image_url} alt={recipe.name}/>
                    </div>
                    <button className="results-btn"><a href={'/recipes/' + recipe.id}>View details</a></button>
                </div>
            ))
        }
    </div>
    </>
  )
}

export default SearchResults