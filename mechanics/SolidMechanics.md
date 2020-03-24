# Solid Mechanics

- [Solid Mechanics](#solid-mechanics)
  - [3D Systems of Forces](#3d-systems-of-forces)
    - [Fundamental Vectors](#fundamental-vectors)
    - [How to find 3D moments](#how-to-find-3d-moments)
  - [Trusses](#trusses)
    - [Method of Joints](#method-of-joints)
    - [Method of sections](#method-of-sections)
  - [Basic Geometric Properties](#basic-geometric-properties)
    - [Centroid](#centroid)
    - [Moment of inertia](#moment-of-inertia)
    - [Sign Convention](#sign-convention)
  - [Shear](#shear)
  - [Axial](#axial)
  - [2D Design (105)](#2d-design-105)
  - [Bending](#bending)
    - [Bending moment diagram](#bending-moment-diagram)
  - [Torsion](#torsion)
  - [Combined Loadings](#combined-loadings)
  - [Deflection](#deflection)
    - [Normal Procedure](#normal-procedure)
    - [Moment-Area Method](#moment-area-method)
  - [Solutions](#solutions)

## 3D Systems of Forces

### Fundamental Vectors

**3D Force System** = a situation in which there is triaxial loading. Forces are expressed as vectors, which are composed of smaller vectors.

$$ \vec F = \vec{F_x} + \vec{F_y} + \vec{F_z} = F_x\cdot\hat{i} + F_y\cdot\hat{j} + F_z\cdot\hat{k}$$

$$ \vec{F} = F\cdot\hat{u}$$

**Coordinate Direction Angles** = the angles between forces along specified axes and the overall force vector. $\alpha$ represents the angle between $\vec{F_x}$ and $\vec F$, $\beta$ represents the angle between $\vec{F_y}$ and $\vec F$, and $\gamma$ represents the angle between $\vec{F_z}$ and $\vec F$.

$$ cos\alpha = \frac{A_x}{A},\ cos\beta = \frac{A_y}{A},\ cos\gamma = \frac{A_z}{A} $$

**Position Vector** = vector with two points in reference to each other rather than the origin. Algebraically, the position vector has $X = (X_b-X_a)$ etc.

$$\vec r_{AB} = (X_b - X_a)\hat{i} + (Y_b - Y_a)\hat{j} + (Z_b - Z_a)\hat{k}$$

**Magnitude** = numerical quantity of the force vector, found using the magnitudes of the forces along each respective axis.

$$ |\vec{F}| = F = \sqrt{F_x^2 +F_y^2 + F_z^2}$$

**Direction Unit Vector** = vector indicating the direction of the force.

$$ \hat{u} =
\begin{bmatrix}
cos{\alpha}\\
cos{\beta}\\
cos{\gamma}\\
\end{bmatrix} = \frac{\vec F}{F} = \frac{\vec r_{AB}}{r_{AB}}
$$

### How to find 3D moments

In order to find the moments, take the cross product between position vector and the force vector $\vec{r}\times\vec{F}$. This can be determined using the below.

$$
\det{\begin{vmatrix}
i & j & k \\
r_x & r_y & r_z \\
F_x & F_y & F_z \\
\end{vmatrix}}\tag{Moment Equation}
$$

If you need the moment about a specified axis, you can use one of the below shortcut formulas.

$$r_yF_z - r_zF_y\tag{Moment about x axis}$$

$$r_zF_x - r_xF_z\tag{Moment about y axis}$$

$$r_xF_y - r_yF_x\tag{Moment about z axis}$$

**Right Hand Rule** = with the thumb curled in the direction of the specified axis, the fingers curl in the direction of positive moment along that axis.

## Trusses

There are a couple big assumptions made in method of trusses:

1. All joints are pins (hinges)
2. All members are weightless

- If weight is accounted for, must put half of the member's weight as a vertical force on each end of the member

1. All loads are applied at joints only

- Accurate assumption for roof and bridge trusses

### Method of Joints

The method of joints requires knowledge of a couple important concepts.

The first is, reactions at joints are opposite of that felt in the member itself. This is because a member needs to be in equilibrium ($\sum{F}=0$). In other words, if a member resists an external force, it will apply a force onto the joint in the direction that keeps the joint in equilibrium. However, then the joint applies an opposite force on the member to keep it in equilibrium.

Secondly, if there is a member that can apply a force at a joint that no other member can oppose, it is considered a zero-force member. This means that no force will be applied from it.

When evaluating each joint, they are typically assumed to be in tension to speed up the process. However, this is not necessary. With this assumption

Procedure of analysis ([Example](http://benjaminklassen.com/documents/examples/statics/methodofjoints.pdf)):

1. Find all external reactions
2. Start at a joint that has one unknown. Solve for forces along the x direction and y direction.
3. After solving for force along member, mark with arrows on the member whether it is in compression or tension.
4. Continue along truss until all forces are known.

> In order to solve for full forces in one step, multiply force by unit vector in direction of analysis and solve for actual force.

### Method of sections

- Used to save time
- One can only cut a maximum of 3 members at a time

Procedure for analysis ([Example](http://benjaminklassen.com/documents/examples/statics/methodofsections.pdf)):

1. Find all external reactions
2. Take a cut such that it is possible to solve for an unknown, drawing forces assumed in tension
3. Solve for unknown. Repeat cuts untin necessary information found

## Basic Geometric Properties

### Centroid

$$ \bar x = \frac{\sum(A\prime \bar x\prime)}{\sum(A\prime)} \tag{X axis centroid} $$

$$ \bar y = \frac{\sum(A\prime \bar y\prime)}{\sum(A\prime)} \tag{Y axis centroid} $$

$$ \bar x = \frac{\int_A \tilde x dA}{\int_A dA} \tag{Centroid of Area}$$

$$ \bar x = \frac{\int_V \tilde x dV}{\int_V dV} \tag{Centroid of Volume}$$

### Moment of inertia

**Moment of inertia** = provides resistance against changing the rotational speed of rotating body. In a sense, it is analagous of mass in rotational situations. Units in form eg. $ lb\cdot in^2 $. dM represents small quantity of mass, and r represents distance of small mass from the axis.

There are two forms of moment of inertia: mass and area. These are often confused, but they are relatively simple to distinguish.

If someone says "moment of inertia", they are referring to mass, or first moment of inertia. This is referred to by I in calculations.

$$ I = \int r^2 dM \tag{Moment of inertia} $$

$$I = I_{cm} + md^2 \tag{Parallel Axis Theorum Mass}$$

While the MOI equation is cool, MOIs are found on wikipedia for common shapes.

If someone says "second moment of inertia", they are referring to area. This is used in beam design, with units of $mm^4$.

$$ I_{xx} = \int y^2 dA \tag{Second Moment of inertia X Axis} $$

$$I_z = I_x + Ar^2 \tag{Parallel Axis Theorum Area}$$

### Sign Convention

![Cutting Sign Convention](https://ecourses.ou.edu/ebook/statics/ch08/sec081/media/d8121.gif)

## Shear

![Complementary property of shear](https://i.imgur.com/asMdzWW.jpg?1)

$$\tau_{xy} = \tau\prime_{xy} = \tau_{yx} \tag{Complementary Property of Shear}$$

The **Complementary Property of Shear** means that every face of the cube element must be in equilibrium. Hence, the opposite side of the cube experiences the opposing direction of shear. $\tau_{xy}$ refers to shear originating at the x-axis and going in the direction of the y-axis.

How to find required diameter of pin given required average shear ([Example](http://benjaminklassen.com/documents/examples/statics/findingrequiredpindiameter.pdf)):

1. Find all external forces being applied at the pins
2. Find resultant forces being applied
3. Check if pin is in double shear. If so, divide resultant force by 2
4. Use formula $\tau_{avg} = V/A$ and isolate for pin diameter.

- shear formula
- shear centre
- shear flow

## Axial

$$ \delta^{F_x} = \sum{\frac{{F_x}L}{AE}} \tag{Force Deformation Formula}$$

$$ \delta^{T} = \alpha\Delta{T}L \tag{Thermal Deformation Formula}$$

- $\alpha$ is the linear coefficient of thermal expansion, and is unique to the material

Procedure for indeterminate analysis ([Example](http://benjaminklassen.com/documents/examples/statics/indeterminatedeformation.pdf)):

1. Allow for uncontrolled thermal expansion
2. Statics. For these scenerios, DO NOT ASSUME TENSION
3. Combatibility equations. If there is a gap, include it here
4. Constitutive law
5. Solve equations

## 2D Design (105)

To find internal 2D shear, moment, and axial reactions ([Example](http://benjaminklassen.com/documents/examples/statics/2dinternalloadings.pdf)):

1. Draw FBD
2. Solve for reactions
3. Take cuts at desired points and solve

To design plate with a bolt ([Example](http://benjaminklassen.com/documents/examples/statics/designplate.pdf)):

- In order to design this plate with a bolt properly, one must test for bearing of plate (punching failure), tension of plate (tensile failure), shear of plate (also punching), and shear of bolt. All of this is assuming that allowable bearing, shear, and tensile stresses are given

1. Check failure of the plate in tension. Use $\sigma_{allow} = N/A$ at the smallest cross-section.
2. Check failure of the plate by bearing.
   1. Project curved area of the bolt to a rectangle.
   2. Use $\sigma_{allow} = \frac{N}{Projected A}$ at the bolt hole
3. Check failure of plate by shear (remember bolt is in double shear)
   1. Calculate area that would experience shear if bolt pushed through
   2. Use $\tau_{allow} = V/A$ to solve
4. Check failure of bolt by shear. Remember that in equilibrium, the shear force felt by the bolt is equal to the force applied to the bar
   1. Use $\tau_{allow} = V/A$ to solve

## Bending

### Bending moment diagram

Method 1: Shear method

1. Find reactions
2. Draw shear force diagram
3. Find area of shapes.. point load translates to a rectangle, uniform area load translates to triangle, changing area load translates to parabola. BMD indicates moment as follows: if the shear is positive and increasingly positive, the moment will be positive with increasing slope. If shear is positive but increasingly negative, the monment will be positive with decreasing slope. ETC.

Method 2: Point method

- Remember: moment at the free end of a cantilever is zero because it is static
- You are finding the moment being applied to it, not resisted by it. In this sense, use sign convention for if it is a left cut or a right cut to determine if the resisting moment is positive or not.

1. Choose an end and graph the moment at that point
2. Take cuts at points, find moment about the points.

- 2D flexture formula

## Torsion

- torsion formula
- angle of twist
- statically indeterminate torque-loaded members
- thin-walled sections

## Combined Loadings

- unsymmetrical bending
- inelastic bending

## Deflection

### Normal Procedure

1. Check for points where slope or deflection is known.
   - Deflection is typically zero wherever there is a support
   - Slope has a negative/positive relationship where cuts meet.
2. Solve for reactions at supports
   - Includes both moments and loads at supports.
3. Take a cut any distance x between an end of the beam and a reaction and find Mo equation.
   - Every change in loading requires another cut
4. Integrate equations according to the following equation.
5. Plug in knowns and solve.

$$EI\frac{d^2 y}{d x^2}=M_O\tag{Moment Equation}$$
$$EI\theta(x) = \int{M_O dx} + C\tag{Slope Equation}$$
$$EIy(x)=\int{\int{M_O+C_1dx}} + C_2\tag{Deflection Equation}$$

### Moment-Area Method

$$ \theta(A) = \frac{\Delta DA}{L_{beam}}\tag{General Curvature Slope} $$

$$ \theta DA = \int^D_A{\frac{M}{EI}}\tag{Curvature Slope} $$

- $\theta DA$ is the area under the curvature diagram

$$ \Delta DA = \int^D_A{\frac{M\bar{x}}{EI}}\tag{Curvature Deflection} $$

- It is the moment-area under the curvature diagram
- $\Delta DA$ is the deflection from point tangential to D to point tangential to A. Otherwise, $\Delta AD$ is the deflection from a point tangential to A to a point tangential to D. The point of origination comes first.

To find maximum deflection:

1. Create bending moment diagram
   - Do not do shear force diagram first, takes too much time
   - Canadian method shows moment applied to the point externally. British method shows moment resisted at internal point. For courses sake, use Canadian method.
2. Draw deflection diagram below moment diagram
   - Maximum deflection will be on the side with the longest section of beam. This point will be named D for instance
3. Find curvature of endpoint with respect to starting position (eg. A)
4. Find slope at A by dividing curvature of length over the length
5. Knowing that the $\theta A$ is equivalent to $\theta DA$, it is okay to set $\theta A$ equal to the area of moments between the point of maximum deflection and an endpoint in an effort to discover where the maximum deflection occurs.

## Solutions

- [Chapter 1](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter1.pdf)
- [Chapter 2](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter2.pdf)
- [Chapter 3](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter3.pdf)
- [Chapter 4](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter4.pdf)
- [Chapter 5](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter5.pdf)
- [Chapter 6](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter6.pdf)
- [Chapter 7](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter7.pdf)
- [Chapter 8](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter8.pdf)
- [Chapter 9](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter9.pdf)
- [Chapter 10](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter10.pdf)
- [Chapter 11](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter11.pdf)
- [Chapter 12](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter12.pdf)
- [Chapter 13](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter13.pdf)
- [Chapter 14](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter14.pdf)
- [Chapter 15](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter15.pdf)
- [Chapter 16](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter16.pdf)
- [Chapter 17](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter17.pdf)
- [Chapter 18](http://benjaminklassen.com/documents/courses/solidmechanics/solutions/Chapter18.pdf)
