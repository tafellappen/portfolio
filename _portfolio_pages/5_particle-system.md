---
layout: portfolio-item


title:  "DirectX 11 Particle System"
proj_type: "Academic and Personal Project"
thumbnail_image: "./assets/images/particles/particles-basic.gif"

description: "A basic particle system built with DirectX 11" 
tools: "C++, DirectX 11"
---

  <div class="img-caption-box img-captioned-below">
    <img src="../assets/images/particles/per-second-change.gif" alt="Demo of changing particles per second">
    <p>Changing particles emitted per second</p>
  </div>

<!-- ![Demo of changing particles per second](../assets/images/particles/per-second-change.gif)
Changing particles emitted per second -->

This is a simple particle system that allows the user to edit some of its parameters through a user interface.



It's built off of an existing DirectX 11 project, which was originally given as barebones starter code for my graphics programming class. I continue to use this and another version as a sandbox framework to explore and experiment with different parts of graphics programming.

Dear ImGui is the UI library used for this project. 

![Control panel for particles](../assets/images/particles/control-panel.png)

  <div class="img-caption-box img-captioned-row">
    <p>Changing colors - the particle colors shift between a start and end color, which the user can set</p>
    <img src="../assets/images/particles/color-change.gif" alt="Demo of changing particle colors">
  </div>

  <div class="img-caption-box img-captioned-row">
    <p>Changing the shape that the particles are spawned within - the user can also alter the dimensions</p>
    <img src="../assets/images/particles/emitter-change.gif" alt="Demo of changing emitter shape">
  </div>

  <div class="img-caption-box img-captioned-row">
    <p>Changing the mass used in the physics calculation of the particles' movement</p>
    <img src="../assets/images/particles/mass-change.gif" alt="Demo of changing particle mass">
  </div>

<!-- ![Demo of changing particle colors](../assets/images/particles/color-change.gif)
Changing colors - the particle colors shift between a start and end color, which the user can set
![Demo of changing emitter shape](../assets/images/particles/emitter-change.gif)
Changing the shape that the particles are spawned within - the user can also alter its' dimensions
![Demo of changing particle mass](../assets/images/particles/mass-change.gif)
Changing the mass used in the physics calculation of the particles' movement -->
