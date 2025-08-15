const express = require("express");
const http = require("http");
const {Server} = require("socket.io");
const cors = require("cors");

const app = express();
app.use(cors());

// Create HTTP server from Express
const server = http.createServer(app);

// Create Socket.IO server
const io = new Server(server, {
    cors: {
        origin: "*", // Allow all origins
        methods: ["GET", "POST"]
    }
});

// Handle connection socket
io.on("connection", (socket) => {
    console.log("User connected:", socket.id);

    // Handle incoming messages
    socket.on("send_message", (data) => {
        console.log("Message received:", data);


        // Broadcast message to all connected clients
        io.emit("receive_message", data);
    })

    // Handle client disconnect
    socket.on("disconnect", () => {
        console.log("User disconnected:", socket.id);
    });
});

// Run server
const PORT = process.env.PORT || 3001;
server.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
