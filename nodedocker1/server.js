'use strict';

const express = require('express');

//Constants
const PORT = 8080;
const HOST = '0.0.0.0';
const url = require('url');
const querystring = require('querystring');

//App
const app = express();
app.get('/', (req, res) => {
	var ckid = req.query.ckid;
	if(ckid!=null)
	{
		var outcome=Math.random()*100;
		if(outcome>50)
			res.send('OK');
		else
			res.send('NOT VALID');
	} else
	{
		res.send('Kupac id not set');
	}
});
app.listen(PORT, HOST);