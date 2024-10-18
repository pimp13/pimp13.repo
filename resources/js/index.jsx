import React from 'react';
import ReactDOM from 'react-dom/client';
import {BrowserRouter, Route, Routes} from "react-router-dom";
import './bootstrap';
import App from './App.jsx';
import User from "@/components/Content/User.jsx";
// import About from "@/components/Content/About.js";


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <React.StrictMode>
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<App/>}>
                    <Route path="/users" element={<User/>}></Route>
                    {/*<Route path="/about-us" element={<About/>}></Route>*/}
                </Route>
            </Routes>
        </BrowserRouter>
    </React.StrictMode>
);
