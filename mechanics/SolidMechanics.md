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
    - [Plastic moment](#plastic-moment)
    - [Strain](#strain)
    - [Sign Convention](#sign-convention)
  - [Shear](#shear)
    - [Complementary property of shear](#complementary-property-of-shear)
    - [The Shear Formula](#the-shear-formula)
    - [Shear Flow](#shear-flow)
    - [Shear Center](#shear-center)
  - [Axial](#axial)
    - [Statically indeterminate analysis](#statically-indeterminate-analysis)
  - [Bending](#bending)
    - [Bending moment diagram](#bending-moment-diagram)
    - [2D Axial Due to Bending](#2d-axial-due-to-bending)
    - [3D Axial Due to Bending](#3d-axial-due-to-bending)
    - [Orientation of Neutral Axis](#orientation-of-neutral-axis)
  - [Torsion](#torsion)
    - [Important formulas](#important-formulas)
    - [Statically indeterminate](#statically-indeterminate)
    - [Thin-walled section](#thin-walled-section)
  - [Combined Loadings](#combined-loadings)
  - [Deflection](#deflection)
    - [Normal Procedure](#normal-procedure)
    - [Moment-Area Method](#moment-area-method)
  - [2D Design Examples](#2d-design-examples)
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

The geometric centroid identifies the plane in which the **elastic neutral axis** is found. This is different than the **[plastic neutral axis](#plastic-moment)** which is determined 100% by area. For completely symmetric cross-sections, these axes are the same.

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

Circular sections have a polar moment of inertia, derived from the below

$$J = \int_A{\rho^2dA}\tag{Polar Moment of Inertia}$$

By integrating this with polar coordinates, and knowing that $\rho$ is the radius, the below is true

$$J = \frac{\pi c^4}{2}\tag{Polar MOI Solid Section}$$

$$J = \frac{\pi}{2}\cdot (C_o^4-C_i^4)\tag{Polar MOI Hollow Section}$$

### Plastic moment

The **plastic moment, Mp** is the moment at which the entire cross-section has reached it's yield stress. It is either calculated about the plastic neutral axis $c$ or about the top.

A couple of assumptions are made before Mp is calculated.

1. The top of the cross-section is assumed in compression, the bottom in tension
2. Since yielding occurs @ $\sigma_y$, the stress is assumed to be uniformly so (100% yielded)

Procedure for analysis ([Example](http://benjaminklassen.com/documents/examples/statics/plasticmoment.pdf)):

1. Assume a location for the plastic neutral axis
2. Plot strain and stress diagram next to cross-section
3. Determine expressions in terms of $c$ for each respective segment of cross-section
4. Use equilibrium equations to isolate for $c$
5. Check to verify that $c$ was assumed in the correct location
6. Once $c$ is known, use it to find resultant forces
7. Solve for Mp

### Strain

$$\varepsilon = \frac{\Delta L}{L_1}\tag{Longitudinal Strain}$$

$$\gamma = \theta\cdot\rho\tag{Shear Strain}$$

- maximum strain when $\rho$ is equal to c, or the point at the surface of rod

$$ E = \frac{\sigma}{\varepsilon}\tag{Young's Modulus}$$

$$ G = \frac{\tau}{\gamma}\tag{Shear Modulus}$$

- both of the moduli are a ratio between stress and strain

### Sign Convention

![Cutting Sign Convention](https://ecourses.ou.edu/ebook/statics/ch08/sec081/media/d8121.gif)

## Shear

### Complementary property of shear

![Complementary property of shear](https://i.imgur.com/asMdzWW.jpg?1)

$$\tau_{xy} = \tau\prime_{xy} = \tau_{yx} \tag{Complementary Property of Shear}$$

The **Complementary Property of Shear** means that every face of the cube element must be in equilibrium. Hence, the opposite side of the cube experiences the opposing direction of shear. $\tau_{xy}$ refers to shear originating at the x-axis and going in the direction of the y-axis.

While this can be useful, how does one find the average maximum shear stress? This is found along the neutral axis using the **shear formula**.

### The Shear Formula

$$\tau = \frac{VQ}{It} \tag{Shear Formula}$$

- Q is geometric property taken about the neutral axis. It represents the sum of the areas above a specified point multiplied by the distance between their centroids and the neutral axis.
  - Since Q contains a factor of $\bar{y}$, it is parabolic, as it maximizes in the middle and minimizes at extrema.
- I is MOI of entire cross-section about neutral axis
- t is thickness just above point
- V = cross-sectional shear

Note: there are a few assumptions that make this formula's use limited. The formula assumes that shear stress is uniform a cross section's thickness. This is not the case. $\tau$ increases parabolically towards its extremities. This is gets worse with b/h ratios greater than 0.5. Fortunately, for webs of wide-flange sections, this is very accurate. However, it is inaccurate for flanges of wide-flange sections.

### Shear Flow

**Shear flow** is the force per unit length that nails or glue are designed to resist. Shear flow plots are most valid for thin sections, as the shear can then be assumed to be uniform across the cross-sectional thickness.

$$ q = \frac{VQ}{I} \tag{Shear Flow}$$

- V = shear force
- I = MOI about entire cross-section
- Q = $\sum{\bar{y}\cdot A}$

In order to find the force applied along a part of a cross section, use the below formula

$$ F = \int_0^s{q ds}$$

There are few important properties of shear flow:

- Shear flow is zero at endpoints. This is simply because in the calculation, there is no area.
- Shear flow increases/decreases linearly across a horizontal. This is because the $\bar{y}$ is constant across a horizontal, but the area changes linearly across.
- Shear flow is equal on both sides where direction shifts. In other words $q_1 = q_2$ where a horizontal transitions to a vertical component of a member.
  - If a junction is present in an I bar or something similar where there is shear flowing from 2 sides, the vertical component adds them both. See [example](http://link.com)
- Shear flow is parabolic on verticals. This is because as $\bar{y}$ decreases, the area increases, leading to a quadratic.
- Shear flow maximizes at the neutral axis
- Shear flow cannot be calculated across the N.A. The cut must end at the N.A.
- Shear flow enters the cross section above the N.A. and exits it below the N.A.
- Remember: $\sum{F}=0$ and $\sum{F_y}=V$

How to design according to shear flow:

$$ q = \frac{F_{bolt}}{nail spacing (s)}\tag{Design for nails}$$

$$ q = \tau_{glue}\cdot{b_{glue}(thickness)}\tag{Design for glue}$$

### Shear Center

The shear center, $e$, is the location along the neutral axis where $\sum{M} = 0$. It can be solved either by taking a moment about the point, or by taking a moment another point. If the latter is used, the force applied at e is V.

## Axial

$$ \sigma = E\cdot\varepsilon\tag{Axial stress}$$

### Statically indeterminate analysis

$$ \delta^{F_x} = \sum{\frac{F_{x}L}{AE}} \tag{Force Deformation Formula}$$

$$ \delta^{T} = \alpha\Delta{T}L \tag{Thermal Deformation Formula}$$

- $\alpha$ is the linear coefficient of thermal expansion, and is unique to the material

Procedure for indeterminate analysis:

1. Allow for uncontrolled thermal expansion
2. Statics. For these scenerios, DO NOT ASSUME TENSION
3. Combatibility equations. If there is a gap, include it here
4. Constitutive law
5. Solve equations

## Bending

### Bending moment diagram

Method 1: Shear method

1. Find reactions
2. Draw shear force diagram
3. Find area of shapes.. point load translates to a rectangle, uniform area load translates to triangle, changing area load translates to parabola. BMD indicates moment as follows: if the shear is positive and increasingly positive, the moment will be positive with increasing slope. If shear is positive but increasingly negative, the monment will be positive with decreasing slope. ETC.

Method 2: Point method

- Remember: moment at the free end of a cantilever is zero because it is static
- You are finding the moment being applied to it, not resisted by it. In this sense, use [sign convention](#sign-convention) for if it is a left cut or a right cut to determine if the resisting moment is positive or not.

1. Choose an end and graph the moment at that point
2. Take cuts at points, find moment about the points.

For design, it is important to know that **maximum bending moment** occurs where the shear is zero. This is because shear is the derivative of bending moment, and when the moment is at a maximum (slope = 0), the shear is equal to zero. For a simply supported beam, the maximum bending moment can be calculated at mid-span, since shear is zero there. The below formula simplifies this calculation:

$$M_{mid} = \frac{wL^2}{8}$$

- w is uniform load along beam. If multidirectional load, break w down into $w_y$ and $w_z$ to solve for $M_z$ and $M_y$ respectively

### 2D Axial Due to Bending

$$ \sigma_{x} = -\frac{My}{I} \tag{Simple Flexture Formula}$$

- M = internal moment at specified point
- y = distance from centroidal axis
- I = MOI of cross-sectional area about the neutral axis

The flexture formula simply tells the normal stresses due to moment at any point y from the neutral axis. It is known that normal stress due to bending changes linearly along the cross-section, and it is treated as such.

The negative sign is used because normal sign convention suggests the top in compression and the bottom in tension. Thus, with a negative y on the bottom, the negatives would cancel out to yield a positive normal force. The maximimum force, $\sigma_{max}$, is found at the point furthest from the centroidal axis

### 3D Axial Due to Bending

$$ \sigma_{x} = -\frac{M_{z}\cdot y}{I_{z}}+\frac {M_{y}\cdot z}{I_{y}}\tag{Complete Flexture Formula}$$

![Sign Convention Bending](https://i.imgur.com/h9hm2gr.jpg?3)

- The complete flexture formula assumes a positive sign convention when the top left corner is in tension, according to the above axis.
- The **Right Hand Rule** can help decipher tension or compression. Point your thumb in the direction of the axis above. Your fingers will curl in the direction that the moment curls. Where the top of the moment arrow exists, compression exists.

One can use the complete flexture formula to plot the **stress-distribution** along the cross-section.

Procedure to plot stress distribution:

1. Find unknowns in complete flexture formula ($M_z$,$M_y$,$I_z$,$I_y$
2. Find coordinates of corners of cross-section
3. Set-up flexture formula with knowns from step 1. Plug-in each coordinate to find stress at that point.
4. If stress due to axial is present, add it to all the calculated values.
5. Draw distribution. Start at the first coordinate and work your way around. If the stress value is negative, this means it is in compression. Thus, the arrows under the triangle will point towards the component of the cross section

- At a single point, stress is the [same](#complementary-property-of-shear) magnitude and form vertically and horizontally, similar to the **complementary property of shear**.

### Orientation of Neutral Axis

In order to find the orientation of the neutral axis, you must first be able to plot the $\sigma_{x}$ distribution along the cross-section. It is this force, which is inherintly caused by multi-axial moments, that causes the change in N.A. because the N.A. axis exists along the plane between where the $\sigma_{x}$ is equal to zero. Hence, a sketch can really help when figuring out the orientation of the axis. If this is understood, here is the derivation of the neutral axis change.

Important variables: $\theta$ is the angle measured from the [positive z-axis](#3d-axial-due-to-bending) clockwise to the $M_{R}$, $M_{z} = M_{R}\cos\theta$, $M_{y} = M_{R}\sin\theta$, $M_{R} = \sqrt{M_z^2+M_y^2}$, and $\alpha$ is the angle of the N.A.

We know that at the neutral axis, axial stress due to bending is equal to zero. Thus, by setting the Complete Flexture Formula equal to zero, you will isolate for the below

$$ \frac{y}{z} = \frac{M_y\cdot I_z}{M_z\cdot I_y}$$

Knowing the above variables, and since we know that the angle between y and z is $\alpha$, we can say

$$\tan\alpha = \frac{I_z}{I_y}\tan\theta$$

## Torsion

### Important formulas

$$ \tau_{T} = G\cdot\gamma\tag{Shear Stress}$$

$$\tau_{T} = \frac{T\rho}{J}\tag{Shear Stress}$$

- very similar to flexture formula

$$ \phi_{\frac{C}{A}} = \frac{1}{G\cdot J}\sum{TL}\tag{Angle of Twist}$$

$$\theta = \frac{T}{GJ}\tag{Angle of Twist per length}$$

### Statically indeterminate

Procedure to solve statically indeterminate problem ([Example](http://benjaminklassen.com/documents/examples/statics/torsionindeterminate.pdf)):

1. Create a combatibility equation
2. Set up the calculation
3. Take cuts to find torque
4. Solve for polar moment of inertia
5. Solve equation for unknowns
6. Sketch T vs x graph
7. Solve for maximum shear stress
8. Draw stress circle to reveal findings

### Thin-walled section

The method of thin-walled sections is special. In its case, $\tau$ is the average shear stress at the mid-thickness of the wall. Since larger thickness reduces the accuracy of average shear, only thin-walls are allowed. There are 2 requirements for thin-wall analysis:

1. Non-circular section
2. Closed section

Below are some specialized formulas:

$$\tau = \frac{T}{2\cdot t\cdot Am}\tag{Shear Stress}$$

$$J = \frac{4\cdot Am^2}{\oint_0^s{\frac{1}{1}ds}}\tag{Polar MOI}$$

$$\phi = \sum{\frac{T\cdot L}{4\cdot Am^2\cdot G}\oint_0^s{\frac{1}{t}ds}}\tag{Angle of Twist}$$

$$q = \frac{T}{2Am}\tag{Shear Flow}$$

![Am](https://i.imgur.com/FkmXnVG.jpg?1)

- Am is simply the area of the midsection of the cross section, or halfway across the thickness
- The integral with the o is the sum of lengths along the outline of the Am divided by their respective thicknesses

## Combined Loadings

Combined loading analysis is simply 3d analysis. It analyzes $\sigma_x$ from axial and bending, as well as $\tau$ due to shear and torsion.

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

## 2D Design Examples

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

How to find required diameter of pin given required average maximum shear stress ([Example](http://benjaminklassen.com/documents/examples/statics/findingrequiredpindiameter.pdf)):

1. Find all external forces being applied at the pins
2. Find resultant forces being applied
3. Check if pin is in double shear. If so, divide resultant force by 2
4. Use formula $\tau_{avg} = V/A$ and isolate for pin diameter.

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
