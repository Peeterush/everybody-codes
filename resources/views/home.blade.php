<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Infi | Security cameras Utrecht</title>
    <!-- Video camera Icon by Martz90 available at http://www.iconarchive.com/show/circle-icons-by-martz90/video-camera-icon.html under a Creative Commons Attribution-Noncommercial-No Derivate 4.0. Full terms at http://creativecommons.org/licenses/by-nc-nd/4.0 -->
    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/css/video-camera-icon.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="data">
    <h1>Security camera's Utrecht</h1>
    <div id="mapid"></div>
    <main>
        <div id="map"></div>
        <div id="camerasContainer">
            <table id="cameras-0-until-600">
                <thead>
                    <tr>
                        <th colspan="4">Camera's tot 600</th>
                    </tr>
                    <tr>
                        <th>Nummer</th>
                        <th>Naam</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="camera in till600">
                        <tr class="cursor-pointer" @click="selectedId = camera.id"
                            :class="{ 'bg-[#b4182c] text-white': camera.id === selectedId }">
                            <td x-text="camera.number"></td>
                            <td x-text="camera.name"></td>
                            <td x-text="camera.latitude"></td>
                            <td x-text="camera.longitude"></td>
                        </tr>
                    </template>
                </tbody>
            </table>

            <table id="cameras-600-until-700">
                <thead>
                    <tr>
                        <th colspan="4">Camera's 600 tot 700</th>
                    </tr>
                    <tr>
                        <th>Nummer</th>
                        <th>Naam</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="camera in from600to700">
                        <tr class="cursor-pointer" @click="selectedId = camera.id"
                            :class="{ 'bg-[#b4182c] text-white': camera.id === selectedId }">
                            <td x-text="camera.number"></td>
                            <td x-text="camera.name"></td>
                            <td x-text="camera.latitude"></td>
                            <td x-text="camera.longitude"></td>
                        </tr>
                    </template>
                </tbody>
            </table>

            <table id="cameras-700-until-800">
                <thead>
                    <tr>
                        <th colspan="4">Camera's 700 tot 800</th>
                    </tr>
                    <tr>
                        <th>Nummer</th>
                        <th>Naam</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="camera in from700to800">
                        <tr class="cursor-pointer" @click="selectedId = camera.id"
                            :class="{ 'bg-[#b4182c] text-white': camera.id === selectedId }">
                            <td x-text="camera.number"></td>
                            <td x-text="camera.name"></td>
                            <td x-text="camera.latitude"></td>
                            <td x-text="camera.longitude"></td>
                        </tr>
                    </template>
                </tbody>
            </table>

            <table id="cameras-rest">
                <thead>
                    <tr>
                        <th colspan="4">Camera's (overigen)</th>
                    </tr>
                    <tr>
                        <th>Nummer</th>
                        <th>Naam</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="camera in above800">
                        <tr class="cursor-pointer" @click="selectedId = camera.id"
                            :class="{ 'bg-[#b4182c] text-white': camera.id === selectedId }">
                            <td x-text="camera.number"></td>
                            <td x-text="camera.name"></td>
                            <td x-text="camera.latitude"></td>
                            <td x-text="camera.longitude"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </main>
    <div id="source">
        source:
        <a
            href="https://data.overheid.nl/dataset/utrecht-cameraregister-utrecht">https://data.overheid.nl/dataset/utrecht-cameraregister-utrecht</a>
    </div>
</body>

</html>
