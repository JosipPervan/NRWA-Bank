import{createBrowserRouter, Routes} from "react-router-dom";
import NotFound from "./views/NotFound";
import Signup from "./views/signup";
import Login from "./views/login";
import Account from "./views/account";
import Branch from "./views/branch";
import Business from "./views/business";
import Customer from "./views/customer";
import Department from "./views/department";
import Employee from "./views/employee";
import Individual from "./views/individual";
import Officer from "./views/officer";
import Product_Type from "./views/product_type";
import Transaction from "./views/transaction";
import DefaultLayout from "./components/DefaultLayout";
import GuestLayout from "./components/GuestLayout";
import UserLayout from "./components/UserLayout";
import AdminLayout from "./components/AdminLayout";

const router = createBrowserRouter(Routes[
            
           {
            path: '/',
            element: <DefaultLayout></DefaultLayout>,
            children: [
                {
                    path: '/users',
                    element: <Users></Users>
                },
            ]
           },

           {
            path: '/',
            element: <GuestLayout></GuestLayout>,
            children: [
                {
                    path: '/login',
                    element: <Login></Login>
                },
                {
                    path: '/signup',
                    element: <Signup></Signup>
                },
            ]
           },

           {
            path: '/',
            element: <UserLayout></UserLayout>,
            children: [
                {
                    path: '/account',
                    element: <Account></Account>
                },
                {
                    path: '/transaction',
                    element: <Transaction></Transaction>
                },
            ]
           },


           {
            path: '/',
            element: <AdminLayout></AdminLayout>,
            children: [
                {
                    path: '/account',
                    element: <Account></Account>
                },
                {
                    path: '/transaction',
                    element: <Transaction></Transaction>
                },

                {
                    path: '/officer',
                    element: <Officer></Officer>
                },
                {
                    path: '/acc_transaction',
                    element: <Acc_Transaction></Acc_Transaction>
                },
                {
                    path: '/Business',
                    element: <Business></Business>
                },
                {
                    path: '/Product',
                    element: <Product></Product>
                },
                {
                    path: '/ProductType',
                    element: <ProductType></ProductType>
                },
                {
                    path: '/Individual',
                    element: <Individual></Individual>
                },
                {
                    path: '/Customer',
                    element: <Customer></Customer>
                },
                {
                    path: '/Department',
                    element: <Department></Department>
                },
                {
                    path: '/Employee',
                    element: <Employee></Employee>
                },
                {
                    path: '/Branch',
                    element: <Branch></Branch>
                }
            ]
           }

])

export default router;
