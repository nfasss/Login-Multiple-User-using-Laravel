<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Routine & Beauty Tips</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2,
        h3 {
            color: #007bff;
            text-align: center;
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: disc;
            padding-left: 20px;
        }

        .edit-delete-buttons {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daily Routine & Beauty Tips') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="container">
                        <h2>Daily Skincare Routine :) </h2>
                        <br>
                        <p>Here's a simple daily skincare routine:</p>
                        <ul>
                            <li>Wash your face with a gentle cleanser in the morning and before bed.</li>
                            <li>Apply a moisturizer with SPF during the day to protect your skin from the sun.</li>
                            <li>Use a night cream to hydrate and nourish your skin while you sleep.</li>
                        </ul>
                        <br>
                        <h2>Beauty Tips ^-^</h2>
                        <br>
                        <p>Some beauty tips for glowing skin:</p>
                        <ul>
                            <li>Stay hydrated by drinking plenty of water throughout the day.</li>
                            <li>Eat a balanced diet rich in fruits, vegetables, and healthy fats.</li>
                            <li>Get enough sleep to allow your skin to repair and rejuvenate.</li>
                            <li>Use a face mask once or twice a week to deep clean and hydrate your skin.</li>
                        </ul>

                        <p>Remember, consistency is key when it comes to skincare. Stick to your routine and you'll see
                            results!</p>
                        <br>
                        <x-button class="ms-4">Edit</x-button>
                        <x-button class="ms-4">Delete</x-button>

                    </div>

                </div>
            </div>
        </div>

    </x-app-layout>


</body>

</html>
