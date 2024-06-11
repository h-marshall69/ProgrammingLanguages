// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyB6gO-wQHg0GBkRJOhXFhBqS2032dc_99A",
  authDomain: "libro-react-c37a8.firebaseapp.com",
  projectId: "libro-react-c37a8",
  storageBucket: "libro-react-c37a8.appspot.com",
  messagingSenderId: "503603009272",
  appId: "1:503603009272:web:60cf4f449a3b78c0dd8d0d",
  measurementId: "G-J2N0890LVC"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export default app;