'use client'

import { Inter } from 'next/font/google'
import './globals.css'
import Header from './components/header.js'
import Button from './components/toggleButton'
import Message from './components/message'


import React from 'react'


export default function RootLayout({  }) {
  return (
    <div>
        <Header></Header>
        <Button></Button>
        <Message type="success">Bien hecho</Message>
        <Message type="error">Mal hecho</Message>
    </div>
    
  )
}
