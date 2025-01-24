const jsonflle = require('jsonfile');
const moment = require('moment');

const simpleGit = require('simple-git'); 

const FILE_PATH = './data.json';

const makeCommit = (x,y) => {
    const DATE = moment().subtract(1,'y').add(x, 'W').add(y+3,'d').format(); 
    const data = { date: DATE };
    jsonflle.writeFile(FILE_PATH, data, ()=>{
        simpleGit().add( [FILE_PATH] ).commit(DATE, {'--date': DATE });
    });
}

for(let i=0;i<100;i++){
    let x = Math.floor(Math.random()*53)-40;
    let y = Math.floor(Math.random()*6);
    makeCommit(x,y);
}
// makeCommit(1,1);

simpleGit().push();
