
import firebase from "firebase/app";
import "firebase/firestore";

// TODO: Replace the following with your app's Firebase project configuration
// See: https://firebase.google.com/docs/web/learn-more#config-object
const firebaseConfig = {
    apiKey: "AIzaSyCsR3wu69DzyMWZEp-5kuVjqN_BeY9iTB4",
    authDomain: "dbiniciosesion.firebaseapp.com",
    projectId: "dbiniciosesion",
    storageBucket: "dbiniciosesion.appspot.com",
    messagingSenderId: "1053225635765",
    appId: "1:1053225635765:web:4451bdb4a6b26191f553fc"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
    

// Initialize Cloud Firestore and get a reference to the service
const db = firebase.firestore();
