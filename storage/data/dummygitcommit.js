const jsonflle = require('jsonfile');
const moment = require('moment');

const simpleGit = require('simple-git'); 

const FILE_PATH = './data.json';

const makeCommit = (x,y) => {
    // const DATE = moment().subtract(1,'y').add(x, 'W').add(y,'d').format(); 
    const DATE = moment().subtract(1, 'y').add(x, 'W').add(2, 'd').format();

    const data = { date: DATE };
    jsonflle.writeFile(FILE_PATH, data, ()=>{
        simpleGit().add( [FILE_PATH] ).commit(DATE, {'--date': DATE }).push();
    });
}

// for(let i=0;i<100;i++){
//     let x = 40 + Math.floor(Math.random()*13);
//     let y = Math.floor(Math.random()*6);
//     makeCommit(x,y);
//     // console.log(x,y);
// }
makeCommit(39,3);

// simpleGit().push();
