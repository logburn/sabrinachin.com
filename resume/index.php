<!doctype html>
<html lang=en>
<head>
  <meta charset=utf-8>
  <title>Sabrina Chin - resume</title>
  <link rel='shortcut icon' type=image/png href=/tristan.png>
  <meta name=viewport content=width=device-width,initial-scale=1.0>
  <style>
      body{
          margin: 0;
          overflow: hidden;
      }
      embed{
          position: absolute;
          top: 2em;
          border: none;
          width: 100vw;
          height: calc(100vh - 2em);
      }
      p.top{
          margin: 0;
          font-size: 1em;
          padding: 0.5em 0;
          width: 100vw;
          text-align: center;
          background-color: #333;
          color: #bbb;
          font-weight: bold;
          font-family: sans-serif;
          position: absolute;
          top: 0em;
      }
      p.fail{
          font-size: 3em;
          width: 100vw;
          position: absolute;
          top: 20vh;
          text-align: center;
          color: white;
          
          -moz-animation: cssAnimation 100ms ease-in 3s forwards;
          /* Firefox */
          -webkit-animation: cssAnimation 100ms ease-in 3s forwards;
          /* Safari and Chrome */
          -o-animation: cssAnimation 100ms ease-in 3s forwards;
          /* Opera */
          animation: cssAnimation 100ms ease-in 3s forwards;
          -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
      }
      a{
          color: #00ab44;
          text-decoration: none;
      }
      a:hover{
          text-decoration: underline;
      }
      
      @keyframes cssAnimation {
          to {
              color: #333;
          }
      }
      @-webkit-keyframes cssAnimation {
          to {
              color: #333;
          }
      }
  </style>
</head>
<body>
    <p class=top><a href=resume.pdf download>Download as pdf</a></p>
    <p class=fail>Seems like that didn't display correctly, try downloading above instead</p>
    <embed src=resume.pdf title="Sabrina Chin's Resume PDF"></embed>
</body>
</html>
