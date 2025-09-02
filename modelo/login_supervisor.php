<?php
error_reporting(E_ALL);
ini_set('display_errors','1');
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Supervisor</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: linear-gradient(to right, #2980b9, #2c3e50); /* Azul para Supervisor */
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: white;
      color: #2c3e50;
      padding: 2rem;
      border-radius: 12px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      text-align: center;
    }

    .login-box h1 {
      margin-bottom: 1.5rem;
      color: #2980b9;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 1rem;
      margin-bottom: 0.5rem;
      text-align: left;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    button {
      background: #2980b9;
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #1f618d;
      transform: scale(1.05);
    }

    .back-link {
      display: block;
      margin-top: 1rem;
      color: #2980b9;
      text-decoration: none;
      font-weight: bold;
    }

    .back-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h1>Login Supervisor</h1>
    <form action="loguearse_supervisor.p_
