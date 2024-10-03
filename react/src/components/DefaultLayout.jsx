import { Outlet } from "react-router-dom"

export default function DefaultLayout() {
    return (
        <div>
        For default users only
        <Outlet></Outlet>
        
        </div>
    )
}