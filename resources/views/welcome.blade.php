<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PaudApps</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endif
        </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-auto text-gray-700 sm:h-20">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #439ed7;
                            }

                            .cls-2 {
                                fill: #429fd8;
                            }

                            .cls-3 {
                                fill: #dcbf9e;
                            }

                            .cls-4 {
                                fill: #32bcad;
                            }

                            .cls-5 {
                                fill: #f15b5b;
                            }

                            .cls-6 {
                                fill: #fdb913;
                            }
                        </style>
                    </defs>
                    <title>LOGO paudapps</title>

                    <g clip-path="url(#clip0)" fill="#EF3B2D">
                        <path class="cls-1"
                            d="M139.59,25.5q8.25,0,12.93,1.62a11.18,11.18,0,0,1,6.66,5.59q2,4,2,11.11T159.3,54.88a10.52,10.52,0,0,1-6.15,5.51A33.87,33.87,0,0,1,141.65,62q-3.81,0-7.57-.36t-7-.95a53.38,53.38,0,0,1-5.55-1.27,18.2,18.2,0,0,1-3.18-1.15l.24-7h20.7a13.35,13.35,0,0,0,4.29-.67,3.61,3.61,0,0,0,2.1-2.22,14,14,0,0,0,.59-4.56,14.68,14.68,0,0,0-.59-4.68,3.58,3.58,0,0,0-2.1-2.26,12.08,12.08,0,0,0-4.29-.6q-7.7,0-13.16.08t-7.46.32l-1.19-10.39q3.5-.39,6.58-.56c2.07-.1,4.31-.17,6.75-.19S136.15,25.5,139.59,25.5Zm-7.22.79V81H117.46V26.29Z" />
                        <path class="cls-1"
                            d="M196.85,56.82l-.07,7.3h-16.9a3.93,3.93,0,0,0-2.66.91,3.08,3.08,0,0,0-.83,2.26V68.8a2.88,2.88,0,0,0,1,2.34,4.53,4.53,0,0,0,3,.83,11.53,11.53,0,0,0,4.2-.87,20.31,20.31,0,0,0,4.36-2.38,22.48,22.48,0,0,0,3.73-3.25v5.08a28.49,28.49,0,0,1-1.94,3.17,24.48,24.48,0,0,1-3.37,3.85,16.76,16.76,0,0,1-11.82,4.48,16.89,16.89,0,0,1-6.58-1.27,11.14,11.14,0,0,1-4.8-3.73,10.26,10.26,0,0,1-1.79-6.19v-4a8.94,8.94,0,0,1,3.37-7.42c2.25-1.77,5.3-2.66,9.17-2.66ZM186.07,40.49a25.07,25.07,0,0,1,9,1.42,10.71,10.71,0,0,1,5.59,4.76q1.91,3.33,1.91,9.2V81H191.06l-2-8.49-1-1.43V55.79a4.85,4.85,0,0,0-1.23-3.53c-.77-.71-2.15-1.07-4.16-1.07s-4.6,0-7.62.12-6.16.23-9.44.44l-1.26-9.28q2.93-.55,6.86-1t7.89-.72Q183.13,40.49,186.07,40.49Z" />
                        <path class="cls-1"
                            d="M222.08,41.6v25a3.18,3.18,0,0,0,.79,2.62,4.17,4.17,0,0,0,2.85.79,14.83,14.83,0,0,0,3.93-.55,31,31,0,0,0,5.12-2.07l.95,7.38a31.64,31.64,0,0,1-8.17,5.55,20.2,20.2,0,0,1-8.41,1.83q-11.5,0-11.5-11V41.6Zm25.69,0V81H236.43l-1.74-7.94-1.43-1V41.6Z" />
                        <path class="cls-1"
                            d="M267.13,40.49a26.27,26.27,0,0,1,8.24,1.27A14.59,14.59,0,0,1,282,46.12l-1,6c-1.38-.43-2.66-.84-3.85-1.23a14.24,14.24,0,0,0-4.48-.6,6.31,6.31,0,0,0-3.21.72,4.58,4.58,0,0,0-1.83,3,29.53,29.53,0,0,0-.59,6.86,25.16,25.16,0,0,0,.55,6.15,4.07,4.07,0,0,0,1.79,2.69,6.25,6.25,0,0,0,3.05.68,12.25,12.25,0,0,0,3.21-.36,10.71,10.71,0,0,0,2.5-1c.79-.45,1.67-1,2.62-1.55l.95,6.35A16.16,16.16,0,0,1,276,79.59,17.79,17.79,0,0,1,266.33,82q-7.69,0-10.94-5.52t-3.25-15.58q0-8,1.7-12.41a11.26,11.26,0,0,1,5-6.19A17.3,17.3,0,0,1,267.13,40.49Zm26.57-15V81H282.27l-1.42-7.46-1.51-1V47.23l.48-1c-.16-1.64-.28-3.39-.36-5.24s-.12-3.67-.12-5.47v-10Z" />
                        <path class="cls-1"
                            d="M341.44,26.29a5.2,5.2,0,0,1,3.21,1,5,5,0,0,1,1.87,2.86l15,50.84H346.28l-9.6-37.76c-.21-.9-.39-1.86-.55-2.89s-.32-2-.48-2.9h-2.14c-.11.9-.25,1.87-.44,2.9s-.38,2-.59,2.89L322.88,81H307.65l15-50.84a5,5,0,0,1,1.87-2.86,5.2,5.2,0,0,1,3.21-1Zm7.54,31V68H320.19V57.3Z" />
                        <path class="cls-1"
                            d="M374.36,41.6l1.35,6.66,1.5,1.19V75.38l-.47,1c.15,1.64.27,3.39.35,5.27s.12,3.69.12,5.43v8.65H362.78V41.6Zm16.1-1q7.6,0,10.82,5.48t3.22,15.62q0,8-1.71,12.41a11.28,11.28,0,0,1-5,6.19,17,17,0,0,1-8.2,1.79,25.74,25.74,0,0,1-8.25-1.31,14.75,14.75,0,0,1-6.51-4.33l.95-5.94c1.38.42,2.66.83,3.85,1.23a14.28,14.28,0,0,0,4.4.59,6.26,6.26,0,0,0,3.29-.75,4.67,4.67,0,0,0,1.79-3,30.62,30.62,0,0,0,.55-6.78,31.29,31.29,0,0,0-.55-6.82,4.84,4.84,0,0,0-1.71-3,5.24,5.24,0,0,0-3-.76,9.62,9.62,0,0,0-4,.72,36,36,0,0,0-3.57,1.9L375,47.94a12.88,12.88,0,0,1,3.65-3.73,19.52,19.52,0,0,1,5.43-2.61A21.22,21.22,0,0,1,390.46,40.64Z" />
                        <path class="cls-1"
                            d="M420.44,41.6l1.35,6.66,1.5,1.19V75.38l-.47,1c.15,1.64.27,3.39.35,5.27s.12,3.69.12,5.43v8.65H408.86V41.6Zm16.1-1q7.6,0,10.82,5.48t3.22,15.62q0,8-1.71,12.41a11.28,11.28,0,0,1-5,6.19,17,17,0,0,1-8.2,1.79,25.74,25.74,0,0,1-8.25-1.31,14.75,14.75,0,0,1-6.51-4.33l.95-5.94c1.38.42,2.66.83,3.85,1.23a14.28,14.28,0,0,0,4.4.59,6.32,6.32,0,0,0,3.3-.75,4.71,4.71,0,0,0,1.78-3,30.62,30.62,0,0,0,.55-6.78,31.29,31.29,0,0,0-.55-6.82,4.84,4.84,0,0,0-1.71-3,5.24,5.24,0,0,0-3-.76,9.62,9.62,0,0,0-4,.72,36,36,0,0,0-3.57,1.9l-1.9-5.87a12.88,12.88,0,0,1,3.65-3.73,19.52,19.52,0,0,1,5.43-2.61A21.22,21.22,0,0,1,436.54,40.64Z" />
                        <path class="cls-1"
                            d="M470.88,40.49q3.09,0,6.62.23c2.35.16,4.67.35,6.94.56a46.33,46.33,0,0,1,5.87.87l-.95,8.57c-2.59,0-5.19,0-7.81,0s-5.15,0-7.58,0c-1.9,0-3.33,0-4.28.08a4.15,4.15,0,0,0-1.94.43,1.48,1.48,0,0,0-.52,1.31,1.54,1.54,0,0,0,1,1.59c.69.26,2,.66,3.81,1.19l9.68,2.38q5.14,1.35,7.61,3.92t2.46,7.74q0,4.92-1.87,7.65a10,10,0,0,1-6,3.85,42.37,42.37,0,0,1-10.71,1.11q-2.7,0-7.93-.24a96.17,96.17,0,0,1-11.42-1.27l.87-8.64c.79,0,1.94,0,3.45,0s3.18,0,5,0h5.47c2.59,0,4.55,0,5.87-.12a5.58,5.58,0,0,0,2.65-.6,1.64,1.64,0,0,0,.68-1.43,1.62,1.62,0,0,0-1.19-1.62c-.79-.29-2.2-.7-4.2-1.23l-9.28-2.46A17.16,17.16,0,0,1,457,61.5a8.73,8.73,0,0,1-3-4.12,17.26,17.26,0,0,1-.8-5.47,11.32,11.32,0,0,1,1.67-6.39,10.14,10.14,0,0,1,5.51-3.76A34.24,34.24,0,0,1,470.88,40.49Z" />
                        <path class="cls-2"
                            d="M29.64,73c-2,2.23-5.43,6.06-8.89,9.93C11.22,64.33,5.22,40.79,7.55,16.71A8,8,0,0,1,15.24,9.5c15.46-.46,33.07,1.79,49.5,6l-.6,1.56-6.8,1.6A182.12,182.12,0,0,0,24.7,15.34a5.77,5.77,0,0,0-5.76,5.59A115,115,0,0,0,29.64,73ZM83.76,21.47l-2.87,3.32a111.42,111.42,0,0,1,11.79,4.78,5.73,5.73,0,0,1,3,6.9C88.79,58.23,68.86,78.13,47.63,88.92a7.89,7.89,0,0,1-9.87-2.27l0-.06c-2.48,3.55-5.27,7.64-7.81,11.37q.91,1.25,1.83,2.43a7.89,7.89,0,0,0,9.84,2.18c26-13.29,50.64-38.35,59.29-65.86a7.94,7.94,0,0,0-4-9.47A135.61,135.61,0,0,0,83.76,21.47Z" />
                        <path class="cls-3"
                            d="M64,45.72c-1.21-.68-4.57,4.58-9.75,8.44s.56-5.06,2.6-8.55,1.13-4.56-.1-5-6,7.45-6.72,8.66-2.34,3.91-3.52,3.78c-1.34-.14.76-7.76,1.76-10.6s-.81-4-1.89-3.55c-1.42.62-3.67,8-4.07,9.87s-1,4.11-2.29,4.35-2.68-2.89-3.52-7.38c-.37-2-.67-5.45-2.54-4.33s-.61,6.58-.34,8.46a31.78,31.78,0,0,1,.4,7.18c-.17,1.23-1.14,6.17-1.86,9.72-.94,4.63-2.15,5.72-2.89,6.63-.49.61-4.28,4.81-8.47,9.51a118.46,118.46,0,0,0,9.11,15c4.3-6.31,8.83-12.73,11.14-16.23.87-1.31,5.24-8.3,12.86-6,4.94,1.47,6,3.63,7.43,2.23,1.62-1.57-1.7-4.94-6.92-7.86a5.06,5.06,0,0,1-1.77-6.38c.59-1.28,8-9.53,10.86-13S65.21,46.41,64,45.72Z" />
                        <path class="cls-4"
                            d="M45.33,31.83l-4.08-.46-2.68,3.1a.63.63,0,0,1-1.1-.28l-.83-4-3.77-1.6a.63.63,0,0,1-.07-1.13l3.56-2,.36-4.09a.63.63,0,0,1,1.06-.41l3,2.76,4-.92a.63.63,0,0,1,.72.88l-1.69,3.73,2.11,3.51A.63.63,0,0,1,45.33,31.83Z" />
                        <path class="cls-5"
                            d="M74.56,56.44l-1.75-4.63L68,50.64a.77.77,0,0,1-.3-1.34l3.86-3.1-.37-4.93a.76.76,0,0,1,1.18-.7l4.14,2.71,4.58-1.88a.77.77,0,0,1,1,.91l-1.3,4.77L84,50.86a.77.77,0,0,1-.55,1.26l-4.94.24-2.6,4.21A.77.77,0,0,1,74.56,56.44Z" />
                        <path class="cls-6"
                            d="M69.28,11.07a.9.9,0,0,1,.79.44l4,6.54,7.63.44A.93.93,0,0,1,82.32,20l-5,5.79,1.94,7.4A.93.93,0,0,1,78,34.3l-7.05-3-6.43,4.13a.93.93,0,0,1-1.43-.86L63.74,27l-5.92-4.84a.93.93,0,0,1,.38-1.62l7.44-1.75,2.78-7.12A.91.91,0,0,1,69.28,11.07Z" />
                    </g>
                </svg>



            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a
                                    href="https://docs.google.com/spreadsheets/d/19egh6-0JVLIfPa6mYgpBmoEwYozSQ1DcyJOM5TEP-b0/edit#gid=541926052"
                                    class="underline text-gray-900 dark:text-white">Api Documentation</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                PaudApps Dokumentasi hanya bisa di akses oleh tim internal.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#"
                                    class="underline text-gray-900 dark:text-white">Prosedur</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="#"
                                    class="underline text-gray-900 dark:text-white">PaudApps News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                PaudApps News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white"> Ecosystem
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                PaudApps for future
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        window.laravel_echo_port=6001;
    </script>

    <script src="http://localhost:6001/socket.io/socket.io.js"></script>

    <script src="{{ url('/js/app.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        window.Echo.channel('paudapps_test-channel').listen('.ExampleEvent', (e) => {

            console.log('Got event...');
            console.log("e" + JSON.stringify(e))

        });

    </script>





</body>

</html>
