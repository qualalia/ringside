import React from "react";
import ReactDOM from "react-dom";
import Calendar from "./components/Calendar.js";

if (document.getElementById('app')) {
  ReactDOM.render(<Calendar />, document.getElementById('app'));
}
