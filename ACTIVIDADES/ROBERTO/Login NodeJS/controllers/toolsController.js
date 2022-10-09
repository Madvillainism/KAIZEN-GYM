
const {validationResult} = require("express-validator");

const validateRequest = (req, res)=>{
    const errors = validationResult(req);
    if(!errors.isEmpty()){
        errors.array().forEach(error => {console.log(error.msg)});
        return res.send("Error al registrar");
    }else{
        return true;
    }
}

module.exports = {
    validateRequest,
}