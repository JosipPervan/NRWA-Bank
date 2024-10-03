import { Outlet } from "react-router-dom"

export default function AdminLayout() {
    return (
        <div>
        For Admins only
        <Outlet></Outlet>
        
        </div>
    )
}