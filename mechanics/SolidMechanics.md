# Solid Mechanics

- [Solid Mechanics](#solid-mechanics)
  - [Trusses](#trusses)
  - [3D Systems of Forces](#3d-systems-of-forces)
    - [Basic Formulae](#basic-formulae)
    - [How to add vectors](#how-to-add-vectors)
  - [Geometric Properties](#geometric-properties)
  - [Shear](#shear)
  - [Axial](#axial)
  - [Bending](#bending)
  - [Torsion](#torsion)
  - [Combined Loadings](#combined-loadings)
  - [Deflection](#deflection)
    - [Procedure](#procedure)
  - [Design](#design)

## Trusses

- Simple Trusses
- Method of Joints
- Method of Sections
- Frames

## 3D Systems of Forces

### Basic Formulae

$$ \vec F = \vec{F_x} + \vec{F_y} + \vec{F_z} = F_x\cdot\hat{i} + F_y\cdot\hat{j} + F_z\cdot\hat{k}\tag{Definition of 3D Force System} $$

$$ \vec{F} = F\cdot\hat{u} = F(\frac{\vec r_{AB}}{r_{AB}}\tag{Scalar-Vector Force} $$

$$ |\vec{F}| = F = \sqrt{F_x^2 +F_y^2 + F_z^2}\tag{Magnitude of Force Vector} $$

The angles between forces along specified axes and the overall force vector are denoted with symbols. $\alpha$ represents the angle between $\vec{F_x}$ and $\vec F$, $\beta$ represents the angle between $\vec{F_y}$ and $\vec F$, and $\gamma$ represents the angle between $\vec{F_z}$ and $\vec F$.

### How to add vectors

There are 2 ways to add vectors.

The first way is 2 steps.

1. Project vector $\vec{F}$ onto an axial plane.
2. Use trigonometry to solve for force component.

$$ \hat{u} =
\begin{bmatrix}
cos{\alpha}\\
cos{\beta}\\
cos{\gamma}\\
\end{bmatrix} = \frac{\vec F}{F}
$$

$$ cos\alpha = \frac{A_x}{A},\ cos\beta = \frac{A_y}{A},\ cos\gamma = \frac{A_z}{A} $$

- Adding cartesian vectors
- Moment about an axis

## Geometric Properties

- Center of gravity / centroid including composite bodies
- how to reduce distributed load to simple loading
- Moment of inertia (areas, parallel-axis theorem, composite areas

## Shear

- Diameter of pins given allowable stress
- shear formula
- shear centre
- shear flow

## Axial

- statically indeterminate member
- thermal stress

## Bending

- how to make bending moment diagram
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

### Procedure

1. Check for points where slope or deflection is known.
   - Deflection is typically zero wherever there is a support
   - Slope has a negative/positive relationship where cuts meet.
2. Solve for reactions at supports
3. Take a cut any distance x from a reaction and find Mo equation.
   - Every change in loading requires another cut
4. Integrate equations according to the following equation.
5. Plug in knowns and solve.

$$EI\frac{d^2 y}{d x^2}=M_O\tag{Moment Equation}$$
$$EI\theta(x) = \int{M_O dx} + C\tag{Slope Equation}$$
$$EIy(x)=\int{\int{M_O+C_1dx}} + C_2\tag{Deflection Equation}$$

## Design
