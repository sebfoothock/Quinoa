import React, { useState, useEffect } from "react";

const LogOut = () => {
  const [checked, setChecked] = useState(true); //si false disparait

  console.log(checked);

  // useEffect(() => {
  //   if (checked === true) {
  //     console.log("Déconnexion");
  //     //fonction déconnexion
  //   }
  // }, [checked]);

  const handleChange = (event) => {
    //change l'état de checked
    setChecked(event.target.checked);
  };

  return (
    <div className="LogOutContainer" style={checked ? {} : { display: "none" }}>
      <label className="switch">
        <input type="checkbox" checked={checked} onChange={handleChange} />
        <span className="slider round"></span>
        <label className="etatConnexion">état de connexion</label>
      </label>
    </div>
  );
};

export default LogOut;
