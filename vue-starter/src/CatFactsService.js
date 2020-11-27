import axios from 'axios';

const apiBaseUrl = 'https://cat-fact.herokuapp.com';

/* PostService */
export default class CatFactsService{
    getAllCatFacts(){
        return axios.get(`${apiBaseUrl}/facts`);
    }
}