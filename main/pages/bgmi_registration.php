<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGMI Registration</title>
    <?php include('../../library/library.php') ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function updatePlayerFields() {
            const numPlayers = document.getElementById('num_players').value;
            const playerFields = document.getElementById('player_fields');
            playerFields.innerHTML = ''; // Clear existing fields

            for (let i = 2; i <= numPlayers; i++) {
                playerFields.innerHTML += `
                    <label class="block mt-4 font-medium">Player ${i} Name</label>
                    <input type="text" name="player${i}_name" required class="w-full p-3 rounded-lg text-black mb-4 border border-gray-500 focus:ring-2 focus:ring-pink-500 outline-none" placeholder="Enter Player ${i} Name">
                `;
            }
        }
    </script>
</head>

<body class="bg-gradient-to-b from-black via-purple-900 to-black text-white font-sans">

    <!-- Header -->
    <?php include '../layouts/header.php' ?>

    <!-- Registration Form -->
    <main class="flex justify-center items-center mt-20 mb-5">
        <form action="submit.php" method="POST" class="bg-gradient-to-br from-purple-800 via-indigo-900 to-black p-10 rounded-xl shadow-xl w-4/5 max-w-lg border border-gray-700">
            <input type="hidden" name="event" value="BGMI">
            <h2 class="text-3xl font-semibold text-center mb-6">Join BGMI Now!</h2>

            <!-- Email Input -->
            <label class="block mb-2 font-medium">Email Address</label>
            <input type="email" name="email" required class="w-full p-3 rounded-lg text-black mb-4 border border-gray-500 focus:ring-2 focus:ring-pink-500 outline-none" placeholder="Enter your email">

            <!-- Team Leader Name -->
            <label class="block mb-2 font-medium">Team Leader Name</label>
            <input type="text" name="leader_name" required class="w-full p-3 rounded-lg text-black mb-4 border border-gray-500 focus:ring-2 focus:ring-pink-500 outline-none" placeholder="Enter Leader's Name">

           
            <label class="block mb-2 font-medium">Player 2 Name</label>
            <input type="text" name="player2_name" required class="w-full p-3 rounded-lg text-black mb-4 border border-gray-500 focus:ring-2 focus:ring-pink-500 outline-none">

            <label class="block mb-2 font-medium">Player 3 Name</label>
            <input type="text" name="player3_name" required class="w-full p-3 rounded-lg text-black mb-4 border border-gray-500 focus:ring-2 focus:ring-pink-500 outline-none">

            <label class="block mb-2 font-medium">Player 4 Name</label>
            <input type="text" name="player4_name" required class="w-full p-3 rounded-lg text-black mb-4 border border-gray-500 focus:ring-2 focus:ring-pink-500 outline-none">


            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 bg-gradient-to-r from-green-500 to-blue-500 hover:from-green-600 hover:to-blue-600 rounded-lg font-bold text-white shadow-md transform hover:scale-105 transition-all">Register Now</button>
        </form>
    </main>
    <?php include '../layouts/footer.php' ?>
</body>

</html>