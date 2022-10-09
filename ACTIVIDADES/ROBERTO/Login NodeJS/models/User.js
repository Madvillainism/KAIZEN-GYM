
const mongoose = require("mongoose");
const {Schema} = mongoose;

const userSchema = new Schema({
    name:{
        type: String,
        required: true,
    },
    email:{
        type: String,
        unique: true,
        required: true,
    },
    password:{
        type: String,
        requited: true,
        minLength: 8,
    }
});

const User = mongoose.model("User", userSchema);
module.exports = User;