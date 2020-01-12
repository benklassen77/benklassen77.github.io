# Solid Mechanics

## Structural Analysis

### Trusses

- Simple Trusses
- Method of Joints
- Method of Sections
- Frames

### 3D Force System

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
- thin-walled

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
