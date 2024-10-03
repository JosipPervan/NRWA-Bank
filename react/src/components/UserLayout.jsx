import { Outlet } from "react-router-dom"

export default function UserLayout() {
    return (
        <div>
        For Registered users only
        <Outlet></Outlet>
        
        </div>
    )
}