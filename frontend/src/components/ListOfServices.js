import React from 'react'
import Service from './Service'
const serivces = [
     {
      id: 1,
      name_en: 'Billing',
      name_ar: 'coder',
    },
     {
      id: 2,
      name_en: 'Order',
      name_ar: 'mpage',
    },
     {
      id: 3,
      name_en: 'Selling',
      name_ar: 'user123',
    },
     {
      id: 4,
      name_en: 'Customer',
      name_ar: 'user123',
    },
     {
      id: 5,
      name_en: 'Users',
      name_ar: 'user123',
    },
     {
      id: 6,
      name_en: 'Categories',
      name_ar: 'user123',
    },
     {
        id: 7,
        name_en: 'Foods',
        name_ar: 'user123',
      },
    {
        id: 8,
        name_en: 'Warehouse',
        name_ar: 'user123',
    },
    {
        id: 9,
        name_en: 'Reports',
        name_ar: 'user123',
    },
    {
    id: 10,
        name_en: 'Payement',
        name_ar: 'user123',
    },
    {
    id: 11,
        name_en: 'Rooms',
        name_ar: 'user123',
    },
    {
        id: 12,
        name_en: 'Settings',
        name_ar: 'اعدادات',
        },
    ];
export default function listOfServices() {
    return (
        <div className="container">   

        <div className="row row-cols-4">
            {serivces.map(service=><Service name={service.name_en}/>)}
        </div>
        </div>
    )
}
