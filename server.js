'use strict';

const express = require('express');

const app = express();
const router = express.Router();

app.use(express.static('./public'));

const PORT = process.env.PORT || 3000;


app.listen(PORT, () => console.log(`Listening on ${PORT}`));
